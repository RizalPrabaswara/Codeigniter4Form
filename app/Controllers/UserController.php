<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Jabatan;
use App\Controllers\BaseController;
use App\Models\City;
use App\Models\Country;
use App\Models\District;
use App\Models\Skill;

class UserController extends BaseController
{
    protected $jabatan;
    protected $skill;
    protected $country;
    protected $city;
    protected $district;
    protected $user;

    public function __construct()
    {
        helper(['form', 'url']);
        $this->jabatan = new Jabatan();
        $this->skill = new Skill();
        $this->country = new Country();
        $this->city = new City();
        $this->district = new District();
        $this->user = new User();
    }

    public function index()
    {
        $data['jabatan'] = $this->jabatan->findAll();
        $data['skill'] = $this->skill->findAll();
        $data['country'] = $this->country->findAll();
        $data['cities'] = $this->city->findAll();
        $data['districts'] = $this->district->findAll();
        return view('registration', $data);
    }

    public function city()
    {
        $countryID = $this->request->getPost("cId");
        $stateData = $this->user->selectData("cities", array("id_country" => $countryID));

        echo json_encode($stateData);
    }

    public function district()
    {
        $cityID = $this->request->getPost("sId");
        $districtData = $this->user->selectData("districts", array("id_city" => $cityID));

        echo json_encode($districtData);
    }

    public function create()
    {
        $inputs = [
            'name' => [
                'label' => 'Name',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Please enter your name.',
                    'min_length' => 'Name must be atleast 5 characters long.'
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Enter your email.',
                    'valid_email' => 'Please enter a valid email address.'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Enter your password.',
                    'min_length' => 'Password must be atleast 5 digits.'
                ]
            ],
            'confirm_password' => [
                'label' => 'Confirm Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Re-enter your password.',
                    'matches' => 'Confirm password and password must be same.'
                ],
            ],
            'phone' => [
                'label' => 'Mobile number',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Enter your mobile number.',
                    'numeric' => 'Mobile number must be a number.',
                ]
            ],
            'address' => [
                'label' => 'Address',
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' => 'Enter your address.',
                    'min_length' => 'Address must be atleast 10 characters long.'
                ]
            ],
            'sampul' => [
                'label' => 'sampul',
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran Gambar Terlalu Besar',
                    'is_image' => 'Yang anda pilih bukan Gambar',
                    'mime_in' => 'Yang anda pilih bukan JPG/JPEG/PNG'
                ]
            ],
            'jabatan' => [
                'label' => 'jabatan',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Enter your Jabatan.'
                ]
            ],
            'country' => [
                'label' => 'country',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Enter your Country.'
                ]
            ],
            'city' => [
                'label' => 'city',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Enter your city.'
                ]
            ],
            'district' => [
                'label' => 'district',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Enter your district.'
                ]
            ],
            'skill' => [
                'label' => 'skill',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Enter Your Skill.'
                ]
            ],
        ];

        if (! $this->validate($inputs)) {
            $data['jabatan'] = $this->jabatan->findAll();
            $data['skill'] = $this->skill->findAll();
            $data['country'] = $this->country->findAll();
            $data['cities'] = $this->city->findAll();
            $data['districts'] = $this->district->findAll();

            return view('registration', $data);
            // return view('registration', [
            //     'validation' => $this->validator,
            // ]);
        }

        //ambil gambar
        $fileSampul = $this->request->getFile('sampul');
        //cek apakah ada gambar
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'default.jpg';
        } else {
            //generate nama sampul random
            $namaSampul = $fileSampul->getRandomName();

            //pindahkan file
            $fileSampul->move('img', $namaSampul);
        }

        //insert data
        $user = new User();
        $skill = $this->request->getVar('skill[]');
        $js_encode = json_encode($skill);
        $user->save([
            'name' => $this->request->getVar('name'),
            'id_jabatan' => $this->request->getVar('jabatan'),
            'skill' => $js_encode,
            'email'  => $this->request->getVar('email'),
            'password'  => $this->request->getVar('email'),
            'phone'  => $this->request->getVar('phone'),
            'address'  => $this->request->getVar('address'),
            'id_country'  => $this->request->getVar('country'),
            'id_city'  => $this->request->getVar('city'),
            'id_district'  => $this->request->getVar('district'),
            'sampul'  => $namaSampul
        ]);

        session()->setFlashdata('success', 'Success! registration completed.');
        return redirect()->to(site_url('/user'));
    }
}
