<?php

$config = [
    'pelanggan.add' => [
        [
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'telp',
            'label' => 'No Telepon',
            'rules' => 'trim|required|is_numeric|max_length[13]'
        ],
        [
            'field' => 'ktp',
            'label' => 'No Ktp',
            'rules' => 'trim|required|is_numeric|max_length[16]|is_unique[pelanggan.no_ktp]'
        ],
        [
            'field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'trim|required'        
        ]
    ],
    'pelanggan.edit' => [
        [
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'telp',
            'label' => 'No Telepon',
            'rules' => 'trim|required|is_numeric|max_length[13]'
        ],
        [
            'field' => 'ktp',
            'label' => 'No Ktp',
            'rules' => 'trim|required|is_numeric|max_length[16]|callback_no_ktp_check'
        ],
        [
            'field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'trim|required'        
        ]
    ] 
];