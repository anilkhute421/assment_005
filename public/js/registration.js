$("#registrationForm").submit(function (e) {
    e.preventDefault();
    $(".text-danger").text("");

    const firstName = document.querySelector(
        'input[placeholder="First name"]'
    ).value;
    const lastName = document.querySelector(
        'input[placeholder="Last name"]'
    ).value;
    const email = document.querySelector('input[placeholder="Email"]').value;
    const username = document.querySelector(
        'input[placeholder="Username"]'
    ).value;
    const password = document.querySelector(
        'input[placeholder="Password"]'
    ).value;
    const passwordConfirmation = document.querySelector(
        'input[placeholder="Confirm Password"]'
    ).value;

    // Validation flag
    var isValid = true;

    if (firstName === "") {
        // alert('nil');
        isValid = false;
        $('input[placeholder="First name"]')
            .next(".text-danger")
            .text("First name is required.");
    }

    if (lastName === "") {
        isValid = false;
        $('input[placeholder="Last name"]')
            .next(".text-danger")
            .text("Last Name is required.");
    }

    if (username === "") {
        isValid = false;
        $('input[placeholder="Username"]')
            .next(".text-danger")
            .text("Username is required.");
    }

    if (email === "") {
        isValid = false;
        $('input[placeholder="Email"]')
            .next(".text-danger")
            .text("Email is required.");
    }

    if (password === "") {
        isValid = false;
        $('input[placeholder="Password"]')
            .next(".text-danger")
            .text("Password is required.");
    }

    if (passwordConfirmation === "") {
        isValid = false;
        $('input[placeholder="Confirm Password"]')
            .next(".text-danger")
            .text("Password confirmation is required.");
    } else if (password !== passwordConfirmation) {
        isValid = false;
        $('input[placeholder="Confirm Password"]')
            .next(".text-danger")
            .text("Password and Confirm Password do not match.");
    }

    const envDataElement = document.getElementById("envData");

    // Access the data attributes and store them in variables
    const appUrl = envDataElement.dataset.appUrl;

    var url = appUrl + "api/userRegister";

    console.log(url, "url");

    if (isValid) {
        $.ajax({
            url: url,
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf_token"]').attr("content"),
                _method: "post",
            },
            data: {
                firstName: firstName,
                lastName: lastName,
                username: username,
                password: password,
                email: email,
                confirmed: passwordConfirmation,
            },
            success: function (response) {
                alert(response.message);
                $("#registrationForm")
                    .find(
                        'input[type="text"], input[type="password"] , input[type="email"] '
                    )
                    .val("");
            },
            error: function (response) {
                var errors = response.responseJSON.errors;
                var errorMessage = "";
                $.each(errors, function (key, value) {
                    errorMessage += value + "\n";
                });
                alert(errorMessage);
            },
        });
    }
});
