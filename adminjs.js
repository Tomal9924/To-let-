
	function validateForm(){

		flag=true;

		/*

		}*/
		var name=document.getElementById("name");
		var phone=document.getElementById("phone");
    var email=document.getElementById("email");
		var address=document.getElementById("address");
		var username=document.getElementById("username");
		var password=document.getElementById("password");


		//alert("hello");
		if(document.contact.name.value.length==0)
		{

			name.innerHTML="   *Name must be filled up";
			//alert("First Name must be filled out all the fields");
			name.style.color="red";

			flag=false;
		}
		if(document.contact.phone.value.length==0)
		{

			phone.innerHTML="   *Phone must be filled up";
			//alert("First Name must be filled out all the fields");
			phone.style.color="red";

			flag=false;
		}
		if(document.contact.username.value.length==0)
		{

			username.innerHTML="   * Username must be filled up";
			//alert("First Name must be filled out all the fields");
			username.style.color="red";

			flag=false;
		}

		if(document.contact.email.value.length==0)
		{


			email.innerHTML="   *Email must be filled up";
			//alert("First Name must be filled out all the fields");
			email.style.color="red";

			flag=false;
		}

		if(document.contact.address.value.length==0)
		{

			address.innerHTML="   *Address must be filled up";
			//alert("First Name must be filled out all the fields");
			address.style.color="red";

			flag=false;
		}
		if(document.contact.password.value.length==0)
		{

			password.innerHTML="   *Password must be filled up";
			//alert("First Name must be filled out all the fields");
			password.style.color="red";

			flag=false;
		}


		return flag;
	}
