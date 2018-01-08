<!DOCTYPE html>
<html>
<head>
	<title>Khalti</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="https://khalti.com/static/khalti-checkout.js"></script>
</head>
<body>
	<br>
	<h1 style="text-align:center; color: #773292;">
		Pay With Khalti
	</h1>
	<br>
	<hr>
	<br>
	<div class="container">
		<div class="row justify-content-md-center">
    		<div class="col col-lg-4">
				<form >
				  	
				  	<div class="form-group" id="pay-button">
				  		<p id="error-amount" style="color: red;"></p>
					    <label for="amount" style="text-align:center; color: #773292; padding: 0px 0px 20px 0px;"><strong>Enter Amount : </strong> </label>
					    <input type="number" step="any" class="form-control" id="amount" placeholder="Enter Amount">
				  	</div>
					<br>
				  	<button id="payment-button" style="background-color: #773292; color: #fff; border: none; padding: 5px 10px; border-radius: 2px">Pay with Khalti</button>

				</form>
			</div>
		</div>
	</div>

</body>
	<script>

		var config = {
    		// replace the publicKey with yours
            "publicKey": "{{env('KHALTI_TEST_PUBLIC', '')}}",
            "productIdentity": "1234567890",
            "productName": "Account Topup",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                   ajax({
                   	url: "{{route('khalti.verification')}}",
                   	type: 'POST',
                   	data: {
                   		amount: payload.amount,
                   		mobile: payload.mobile,
                   		user_id : payload.productIdentity,
                   		token : payload.token
                   		},
                   	success: function(data) 
                   	{
                   		console.log("success");
                   	},
                   	error: function(data) 
                   	{
                   		console.log("error");
                   	}
                   });
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
		};
        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function (e) {
        	e.preventDefault();
        	var amount = parseFloat($('#amount').val() * 100.00);
        	if (amount < 5000) {
        		$('#error-amount').text('Please Enter amount greater than Rs 50 !!')
        		return false;
        	}
            checkout.show({amount: amount});
        }

    </script>
</html>