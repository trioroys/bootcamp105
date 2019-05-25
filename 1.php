<?php
	$name = 'Dimas Trio Roysaputra';
	$address = 'Jln Raya Kalimulya No 99 Cilodong Depok';
	$hobbies = ['Programming','Gaming','Movies','TV Series or Anime','Design'];
	$married = false;
	$school = ['Highschool' => 'SMK Negeri 1 Depok', 'University' => null];
	$skills = ['PHP' => 80, 'Python' => 60, 'Kotlin' => 40, 'Java' => 40, 'Photoshop' => 70, 'GIMP' => 40, 'Sketch' => 50];

	function bio($name,$address,$hobbies,$married,$school,$skills){
		$bio = [
			'Nama' => $name, 
			'Alamat' => $address, 
			'Hobby' => $hobbies, 
			'Sudah Menikah?' => $married, 
			'Sekolah' => $school, 
			'Skills' => $skills
		];
		$values = json_encode($bio);
		return $values;
	}
	echo bio($name,$address,$hobbies,$married,$school,$skills);
?>