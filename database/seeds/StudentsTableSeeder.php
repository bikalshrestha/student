<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('students')->insert([
            [
                'name' => 'bikal shrestha',
                'date_of_birth' => '1986-05-18',
                'email' => 'bikalshresth@gmail.com',
                'phone' => '0211133556',
                'status' => 'enrolled',
            ],
            [
                'name' => 'Biraz Malla Thakuri',
                'date_of_birth' => '1986-05-18',
                'email' => 'biraz@gmail.com',
                'phone' => '0210023456',
                'status' => 'pending',
            ],
            [
                'name' => 'Ankit Adhikari',
                'date_of_birth' => '1986-05-18',
                'email' => 'ankit@gmail.com',
                'phone' => '0210023453',
                'status' => 'pending',
            ],
            [
                'name' => 'Neha Chauhan',
                'date_of_birth' => '1986-05-18',
                'email' => 'neha@gmail.com',
                'phone' => '0210023452',
                'status' => 'dropped',
            ],
            [
                'name' => 'Kabita Shrestha',
                'date_of_birth' => '1986-05-18',
                'email' => 'avi@gmail.com',
                'phone' => '0210023422',
                'status' => 'enrolled',
            ],
            [
                'name' => 'Michael Carter',
                'date_of_birth' => '1990-10-12',
                'email' => 'micalel007@gmail.com',
                'phone' => '0210023421',
                'status' => 'enrolled',
            ],
            [
                'name' => 'John Dillon',
                'date_of_birth' => '1987-03-25',
                'email' => 'john@gmail.com',
                'phone' => '0210023423',
                'status' => 'dropped',
            ],
            [
                'name' => 'Samantha White',
                'date_of_birth' => '1990-02-17',
                'email' => 'white@hotmail.com',
                'phone' => '0210023422',
                'status' => 'pending',
            ],
            [
                'name' => 'Amy Camerone',
                'date_of_birth' => '1986-05-18',
                'email' => 'amy@yahoo.com',
                'phone' => '0211165741',
                'status' => 'pending',
            ],
            [
                'name' => 'Cristiano Ronaldo',
                'date_of_birth' => '1987-06-05',
                'email' => 'christiano@yahoo.com',
                'phone' => '0211165733',
                'status' => 'enrolled',
            ],
            [
                'name' => 'Martin Guptil',
                'date_of_birth' => '1986-05-18',
                'email' => 'martinguptil@gmail.com',
                'phone' => '0221177743',
                'status' => 'enrolled',
            ],
            [
                'name' => 'Natalie Jones',
                'date_of_birth' => '1990-03-25',
                'email' => 'natile@yahoo.com',
                'phone' => '0221165741',
                'status' => 'pending',
            ],
            [
                'name' => 'Sue Beale',
                'date_of_birth' => '1994-12-15',
                'email' => 'suebeale@yahoo.com',
                'phone' => '0223165741',
                'status' => 'dropped',
            ],
            [
                'name' => 'Samjhana Ranjit',
                'date_of_birth' => '1990-04-18',
                'email' => 'samjhana@yahoo.com',
                'phone' => '0211176541',
                'status' => 'pending',
            ],
            [
                'name' => 'Sushil Timalsina',
                'date_of_birth' => '1986-05-18',
                'email' => 'sushil555@yahoo.com',
                'phone' => '0211165741',
                'status' => 'dropped',
            ],
            [
                'name' => 'Pradeep Bhandari',
                'date_of_birth' => '1990-03-14',
                'email' => 'pradeep@yahoo.com',
                'phone' => '0211165765',
                'status' => 'enrolled',
            ],
            [
                'name' => 'Anita Camerone',
                'date_of_birth' => '1986-05-18',
                'email' => 'anita@yahoo.com',
                'phone' => '0211165741',
                'status' => 'pending',
            ],
            [
                'name' => 'Tony Blair',
                'date_of_birth' => '1995-10-20',
                'email' => 'tony@yahoo.com',
                'phone' => '0233365741',
                'status' => 'enrolled',
            ],
            [
                'name' => 'Harry Blaine',
                'date_of_birth' => '1989-07-19',
                'email' => 'harry@yahoo.com',
                'phone' => '0244465741',
                'status' => 'dropped',
            ],
            [
                'name' => 'Cindrella Jones',
                'date_of_birth' => '1986-05-18',
                'email' => 'cindrella@yahoo.com',
                'phone' => '0216665741',
                'status' => 'dropped',
                ],
        ]);
    }

}
