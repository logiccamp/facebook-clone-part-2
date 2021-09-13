const today = new Date()




for (let i = 1; i <= 31; i++) {
    document.getElementById('d_dob').innerHTML += `<option value='${i}'>${i}</option>`
}

for (let i = 1905; i <= today.getFullYear(); i++) {
    document.getElementById('y_dob').innerHTML += `<option value='${i}'>${i}</option>`
}



function closesignup(){
    $('.signup_container').fadeOut(1000)
}



function showSignup(){
    $('.signup_container').fadeIn(1000)
}


$('#signupbtn').on('click', function(e){
    e.preventDefault();


    var data = {
        action : 'signup',
        firstname : $("#firstname").val(),
        lastname : $("#lastname").val(),
        emailorphone : $("#emailorphone").val(),
        password : $("#password").val(),
        date_dob : $("#d_dob").val(),
        month_dob : $("#m_dob").val(),
        year_dob : $("#y_dob").val(),
        gender : $("#signupform input[name=gender]:checked").val()
    }
    
    $("#report").removeClass("text-danger")
    $("#report").removeClass("text-success")


    $.ajax({
        url : "./api/_signup.php",
        method: "POST",
        data: data,
        success: function(d){
            console.log(d)
            const result = JSON.parse(d)
            console.log(result)
            $("#report").text(result.message);

            if (result.status == false){
                
                $("#report").addClass("text-danger")
            }else{
                
                $("#report").addClass("text-success")
            }
        }
    })
    console.log(data)



})