if (
        !empty($fnameErr == "" && $lnameErr == "" &&  $genderErr == "" &&  $city_er == "" &&  $numb_er == "" &&  $dob_er == "" &&  $pass_er == "" &&  $email_m == "" && $dptErr == "" &&    $pass_m == "" &&  $city_er == "")) 
    {

        $dir_name = 'my_directory';
        $target_dir = 'my_directory/';
        $target_file = $target_dir . basename(time() . $_FILES["filee"]["name"]);
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image

        //Check if the directory with the name already exists
        if (!is_dir($dir_name)) {
            //Create our directory if it does not exist
            mkdir($dir_name);

            $check = getimagesize($_FILES["filee"]["tmp_name"]);
            if ($check == false) {
                $file_er = "* file is not a image ";
            } 
        }
    

    // Check if file already exists     
    elseif (file_exists($target_file)) {
        $file_er = "*Sorry, file already exists";
    }

    // Check file size
    elseif ($_FILES["filee"]["size"] > 500000) {
        $file_er = "Sorry, your file is too large";
    
    }

    // Allow certain file formats
    elseif (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif")
    {
        $file_er = "Sorry, only JPG, JPEG, PNG & GIF files are allowed";
       
    }

       else (move_uploaded_file($_FILES["filee"]["tmp_name"], $target_file))
        {
            $gender = $_POST["gender"];
            $departments = implode(",", $_POST["departments"]);
            // Prepare and execute the SQL statement
            $sql_1 = "INSERT INTO user_d (email, fname, lname, pass, numb, cpass, city, gender, departments, dob, filee) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
            if ($stmt = $mysqli->prepare($sql_1)) {
                $stmt->bind_param("ssssissssss", $email, $fname, $lname, $pass, $numb, $cpass, $city, $gender, $departments, $dob, $filee);
                if ($stmt->execute()) {
                    $success = "Data inserted successfully.";
                   
                } else 
                {
                    echo "Error: " . $stmt->error;
                }
            } 


        } else {
            $file_er = "* Sorry, there was an error uploading your file";
        } 
    }