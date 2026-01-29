<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./booking.css">
</head>

<body>
    <div class="mus">
        
        <h1><img src="WhatsApp Image 2026-01-08 at 21.16.17.jpeg" width="60px" height="60px" class="lap">MedOra</h1><br>


        <div class="box">
            <span class="borderline"></span>



            <form action="" method="post" >


                <div class="one">

                    <h2>Book an Appointment Online</h2>
                    <p>Please fill out the form to schedule your visit</p>
                    <div class="mah"></div>


                    <label>Name</label>
                        <input type="text" required="required" id="for" placeholder="Enter Your Name">
                    
                    <br><br>



                    <label>Email</label>
                        <input type="email" required="required" id="for" placeholder="Enter Your Email">
                    <br> <br>   
                   


                    <label>Address</label>
                        
                        <textarea name="" id="for" required="required" placeholder="Enter your address"></textarea>
                    <br><br>
                   



                    <label>Phone Number</label>
                        <input type="number" required="required" id="for" placeholder="Enter Your Phone Number">
                    
                    <br><br>


                    <label>Age</label>
                        <input type="number" required="require" id="for" placeholder="Enter Your Age">
                    
                    <br><br>


                    <label>Gender</label>
                        <input type="radio" required="required" name="mar">Male
                        <input type="radio" required="required" name="mar">Female
                    
                        <br><br>
                    <label>Doctor Name</label>
                        <input type="text" class="booked_doca" id="for"> <br>  

                    <label>Reason for Visit</label>         
                        <input type="text" class="gang" id="for" placeholder="Please describe your reason for visit...">
                    

                    <br>
                    <br>
                

                    <center>
                        <button class="two" onclick="change()">Book Appointment</button>

                    </center>

                    <h6>"MedOra is available 24/7"</h6>
                </div>


            </form>
        </div>
    </div>
    <script>
        function change() {
            alert("Your submision is successful...")
        }

    </script>

    <script>
        const params= new URLSearchParams(window.location.search);
        const doctorName = params.get("booked_doca");
        if(doctorName){
            document.querySelector(".booked_doca").value=doctorName;
        }
    </script>
</body>

</html>