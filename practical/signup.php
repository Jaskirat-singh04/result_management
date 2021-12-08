<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGTB: RMS SignUp</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .form-btn {
            width: 80%;
            margin: auto;
            text-align: center;
        }

        .form-btn #btn {
            width: 20%;
            margin: 0.5rem auto;
            padding: 0.3rem 0;
            font-size: 20px;
            font-weight: 500;
            color: white;
            background-color: orangered;
            border: none;
            outline: none;
        }

        .form-btn #btn:hover {
            font-size: 19px;
            padding: 0.35rem 0;
            box-shadow: inset 0px 0px 6px rgba(53, 40, 40, 0.4);
        }

        .form-btn .form-status {
            font-size: 24px;
            margin: 2rem auto;
        }

        .timer {
            /* width: 50%; */
            margin: auto;
            margin-bottom: 0;
            position: absolute;
            top: 2%;
            right: 4%;
        }

        .timer p {
            color: orangered;
            font-size: 2.4rem;
            font-weight: bold;
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: column;
            text-align: center;
            position: relative;
            width: 80%;
            margin: 0% auto;
        }

        .container h1 {
            text-align: center;
            font-size: 2.4rem;
            font-weight: 600;
        }

        .container>div {
            width: 65%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .container>div label {
            font-size: 18px;
            font-weight: 500;
            text-align: left;
            margin: 0.4rem 0.5rem;
            margin-top: 0.8rem;
            color: rgb(175, 9, 9);
        }

        .container>div input::-webkit-outer-spin-button,
        .container>div input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .container>div input,
        .container>div select,
        .container>div textarea {
            width: 100%;
            font-size: 15px;
            padding: 7px;
            border: none;
            outline: none;
            background-color: rgb(248, 237, 237);
        }

        .container>div div img {
            vertical-align: bottom;
            margin: 0 2rem;
        }

        .container>div #captcha {
            width: 50%;
        }

        .container button,
        .container>div input[type=button] {
            width: 50%;
            margin: 1rem auto;
            padding: 0.3rem 0;
            font-size: 20px;
            font-weight: 500;
            color: white;
            background-color: orangered;
            border: none;
            outline: none;
            /* transition: 0.2s ease-in-out; */
        }

        .container>div input[type=button]:hover {
            font-size: 19px;
            padding: 0.35rem 0;
            box-shadow: inset 0px 0px 6px rgba(0, 0, 0, 0.6);
        }

        .container .stform,
        .container .teform {
            display: none;
            margin: 2rem auto;
        }

        .container .otp {
            display: none;
            margin: 0 auto;
        }
    </style>

</head>

<body>

    <div class="container">
        <!-- choose if teacher or student -->
        <div class="chooseOne">
            <h1>Select One</h1>
            <select name="choose" id="choose">
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
            </select>
            <button id="choosebtn" type="button">Show Form</button>
        </div>

        <!-- student signup form -->
        <div class="stform">
            <h1>Student Signup Form </h1>
            <label for="name">*Name :</label>
            <input type="text" name="name" id="name" placeholder="Enter name here"></input>

            <label for="name">*Email:</label>
            <input type="text" name="email" id="email" placeholder="Enter email here"></input>

            <label for="name">*Roll No. :</label>
            <input type="text" name="rollno" id="rollno" placeholder="Enter Roll Number here"></input>

            <label for="dob">*Date Of Birth :</label>
            <input type="date" name="dob" id="dob"></input>

            <input type="button" id="st-submit-btn" value="Submit"></input>
        </div>

        <!-- teacher signup form -->
        <div class="teform">
            <h1>Teacher Signup Form</h1>
            <label for="name">*Name :</label>
            <input type="text" name="tname" id="tname" placeholder="Enter name here"></input>

            <label for="name">*Email:</label>
            <input type="text" name="temail" id="temail" placeholder="Enter email here"></input>

            <input type="button" id="otp-btn" value="Send OTP"></input>
        </div>

        <div class="otp">
            <label for="name">*OTP:</label>
            <input type="number" name="otp" id="otp" placeholder="Enter OTP"></input>

            <input type="button" id="te-submit-btn" value="Submit"></input>
        </div>
    </div>

    <!-- Jquery Javascript-->
    <script src="js/jquery-3.6.0.js"></script>
    <script>
        //give option to select if teacher or student
        $(document).ready(function () {
            $('#choosebtn').click(function () {
                let fm = $('select[name=choose]').val();
                let sform = $('.stform');
                let tform = $('.teform');

                if (fm == "student") {
                    sform.show();
                    tform.hide();
                } else {
                    tform.show();
                    sform.hide();
                }
            });
        });

        //student signup form
        $(document).ready(function () {
            $('#st-submit-btn').click(function () {
                let name = $('#name').val();
                let email = $('#email').val();
                let rollno = $('#rollno').val();
                let dob = $('#dob').val();

                let showPara = $(document.createElement('p'));
                showPara.css({
                    fontSize: "14px",
                    color: "red",
                    margin: "0.6rem",
                });

                if (name == "" || dob == "" || email == "" || rollno == "") {
                    showPara.html("Fields should not be Empty");
                    showPara.appendTo('.stform');

                    setTimeout(function () {
                        showPara.hide();
                    }, 3000);
                } else {
                    $.ajax({
                        url: 'partials/_st_signup.php',
                        method: 'POST',
                        data: {
                            st_signup: true,
                            name: name,
                            dob: dob,
                            email: email,
                            rollno: rollno
                        },
                        success: function (data) {
                            // console.log(data);
                            if (data == "Form Submitted successfully") {
                                showPara.css({
                                    fontSize: '16px',
                                    color: 'green'
                                });

                                setTimeout(function () {
                                    location.reload();
                                }, 2000);
                            }
                            showPara.html(data);
                            showPara.appendTo('.stform');

                            setTimeout(function () {
                                showPara.hide();
                                header("location:index.php");
                            }, 3000);
                        }
                    });
                }
            });
        });

        //otp send to email
        let rotp;

        //otp sending
        $(document).ready(function () {
            $('#otp-btn').click(function () {
                let otpf = $('.otp');
                let otpBtn = $('#otp-btn');

                otpBtn.hide();
                otpf.show();

                let name = $('#tname').val();
                let email = $('#temail').val();

                let showPara = $(document.createElement('p'));
                showPara.css({
                    fontSize: "14px",
                    color: "red",
                    margin: "0.6rem",
                });

                $.ajax({
                    url: 'partials/_otp.php',
                    method: 'POST',
                    data: {
                        otpReq: true,
                        name: name,
                        email: email,
                    },
                    success: function (data) {
                        // console.log(data);
                        if (data != "Email sending failed...") {
                            rotp = data;
                        } else {
                            showPara.html("Email sending failed. Try After Sometime or Send correct Email");
                            showPara.appendTo('.otp');

                            setTimeout(function () {
                                showPara.hide();
                            }, 3000);
                        }
                    }
                });
            });
        });

        //teacher signup form
        $(document).ready(function () {
            $('#te-submit-btn').click(function () {
                let name = $('#tname').val();
                let email = $('#temail').val();
                let otp = $('#otp').val();

                let showPara = $(document.createElement('p'));
                showPara.css({
                    fontSize: "14px",
                    color: "red",
                    margin: "0.6rem",
                });

                if (name == "" || email == "" || otp == "") {
                    showPara.html("Fields should not be Empty");
                    showPara.appendTo('.otp');

                    setTimeout(function () {
                        showPara.hide();
                    }, 3000);
                } else if (otp != rotp) {
                    showPara.html("OTP Mismatched");
                    showPara.appendTo('.otp');

                    setTimeout(function () {
                        showPara.hide();
                    }, 3000);
                }
                else {
                    $.ajax({
                        url: 'partials/_te_signup.php',
                        method: 'POST',
                        data: {
                            te_signup: true,
                            name: name,
                            email: email,
                        },
                        success: function (data) {
                            console.log(data);
                            if (data == "Form Submitted successfully") {
                                showPara.css({
                                    fontSize: '16px',
                                    color: 'green'
                                });

                                showPara.html(data);
                                showPara.appendTo('.otp');

                                setTimeout(function () {
                                    showPara.hide();
                                    header("location:index.php");
                                }, 3000);
                            }
                            showPara.html(data);
                            showPara.appendTo('.otp');

                        }
                    });
                }
            });
        });

    </script>

</body>

</html>