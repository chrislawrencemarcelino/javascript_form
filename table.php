<html>
    <head>
        <title>Table Form</title>
    </head>
    <body>
        
        <h1 onclick="alert('Listen');">Student Record</h1>
        <table id="student_record" border="1">
            
        </table>

        <script>
            const student_record = document.getElementById("student_record");
            console.log("Hello World");

            const row1 = student_record.insertRow();
            const row1col1 = row1.insertCell();
            row1col1.innerHTML="LAST NAME";
            const row1col2 = row1.insertCell();
            row1col2.innerHTML="FIRST NAME";

            const row2 = student_record.insertRow();
            const row2col1 = row2.insertCell();
            const row2col2 = row2.insertCell();
            const inputLastName = document.createElement("INPUT");
            inputLastName.type ="text";
            inputLastName.placeholder="enter last name";

            row2col1.append(inputLastName);

            const inputFirstName = document.createElement("INPUT");
            inputFirstName.type ="text";
            inputFirstName.placeholder="enter first name";

            row2col2.append(inputFirstName);

            
            const row3 =student_record.insertRow();
            const row3col1 = row3.insertCell();
            row3col1.colSpan = 2;

            const submitButton =document.createElement("INPUT");
            submitButton.type = "Submit";
            submitButton.value = "Submit";
            row3col1.append(submitButton);
            


            console.log(student_record);
        </script>        
    </body>
</html>