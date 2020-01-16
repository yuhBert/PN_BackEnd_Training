<!DOCTYPE html>
    <html>
    
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box}

    form{
        border:10px solid black;
        margin-left:30%; 
        margin-right:30%;
        margin-top:2%;
    }

    /* Full-width input fields */
    input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
    }
    h1{
        text-align:center;
    }

    hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
    }

    /* Set a style for all buttons */
    button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    }

    button:hover {
    opacity:4;
    }

    /* Add padding to container elements */
    .container {
    padding: 16px;
    }

    /* Clear floats */
    .clearfix::after {
    content: "";
    clear: both;
    display: table;
    }

    a {
    color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
    background-color: #f1f1f1;
    text-align: center;
    }
    </style>
    <body>

        <form class="form" action="editDeleteStudents(01-16-20).php" method="post">
            <div class="container">
                <h1>Enter Student Information</h1>
                <hr>

                <label><b>First Name</b></label>
                <input class="input"  type="text" placeholder="Enter First Name" name="first name" value="">

                <label><b>Last Name</b></label>
                <input class="input"  type="text" placeholder="Enter Last Name" name="last name" value="">

                <label><b>Adress</b></label>
                <input class="input"  type="text" placeholder="Enter Address" name="address" value="">

                <label><b>Course</b></label>
                <input class="input" type="text" placeholder="Enter Course" name="course" value="">

                <label><b>School</b></label>
                <input class="input"  type="text" placeholder="Enter School" name="school" value=""><hr>
                <div class="clearfix">
                <button type="submit" class="submit">Update Student</button>
                </div>
               
            </div>
        </form>

    </body>
</html>