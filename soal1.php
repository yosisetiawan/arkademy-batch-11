<?php

    function show_JSON($_name,$_age,$_address,$_hobies,$is_married,$list_school,$_skills,$_interest)
    {
        $data = array(
            'name' => $_name,
            'age' => $_age,
            'address' => $_address,
            'hobbies' => $_hobies,
            'is_maried' => $is_married,
            'list_school' => $list_school,
            'skills' => $_skills,
            'interest_in_coding' => $_interest
        );

        return json_encode($data);
    }

    $name = 'Antonio Yosie Setiawan';
    $age = 18;
    $addres = 'Cileungsi Kabupaten Bogor Jawa Barat';
    $hobbies = ['Mendengarkan Musik','Coding','Bermain Gitar'];
    $is_maried = FALSE;
    $listSchool = array(
        'name' => 'SMK AL-Bahri Bekasi',
        'year_in' => '2016',
        'year_out' => '2019',
        'major' => 'null'
    );
    class Skill{
        public $skill_name;
        public $level;
    }

    $sk1 = new Skill();
    $sk1->skill_name = 'Codeigniter';
    $sk1->level = 'Advanced'; 

    $sk2 = new Skill();
    $sk2->skill_name = 'Laravel';
    $sk2->level = 'Beginner';

    $skills = [$sk1,$sk2];

    $interest = TRUE;

    echo show_json($name,$age,$addres,$hobbies,$is_maried,$listSchool,$skills,$interest);
?>