<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <script src="https://cdn.tailwindcss.com"></script>
</head> 
<body>
    <div class="main">
        <div class="container">
            <div class="signup-form">
                <form method="POST" class="register-form" id="register-form">
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-input">
                                <label for="first_name" class="required">First name</label>
                                <input type="text" name="first_name" id="first_name" />
                            </div>
                            <div class="form-input">
                                <label for="last_name" class="required">Last name</label>
                                <input type="text" name="last_name" id="last_name" />
                            </div>

                            <div class="form-input">
                                <label for="email" class="required">Email</label>
                                <input type="text" name="email" id="email" />
                            </div>

                            <div>
                                <label for="email" class="required">Password</label>
                                <input type="password" placeholder="Password" id="password" required>
                                <label for="email" class="required">Confirm Password</label>
                                <input type="password" placeholder="Confirm Password" id="confirm_password" required>

                            </div>
                            <div class="form-input">
                                <label for="phone_number" class="required">Phone number</label>
                                <input type="text" name="phone_number" id="phone_number" />
                            </div>
                            <div>
                                <label for="birthday">Birthday:</label>
                                <input type="date" id="birthday" name="birthday">
                            </div>
                        </div>
                       
                        <div class="form-radio-group">
                        <label for="payment">Gender</label>
                            <div class="form-radio-item">
                                <input type="radio" name="payment" id="cash" checked>
                                <label for="cash">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="payment" id="cheque">
                                <label for="cheque">Female</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="payment" id="demand">
                                <label for="demand">Other</label>
                                <span class="check"></span>
                            </div>
                        </div>

                        <div>
                            Departments: <br>
                            <input type="checkbox" id="C" name="C" value="C" />
                            <label>English</label> <br>
                            <input type="checkbox" id="Java" name="Java" value="Java" checked=?yes? />
                            <label>Marathi</label> <br>
                            <input type="checkbox" id="Python" name="Python" value="Python" />
                            <label>French</label> <br>
                            <input type="checkbox" id="PHP" name="PHP" value="PHP" />
                            <label>Nepali</label>
                        </div>

                        <div class="form-group">
                            <label>City</label>
                            <div class="select-list">
                                <select name="meal_preference" id="meal_preference">
                                    <option value="Vegetarian">vidisha</option>
                                    <option value="Kosher">indore </option>
                                    <option value="Asian Vegetarian">bhopal</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <input type="file" id="myFile" name="filename">

                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    

    

</body>
</html>