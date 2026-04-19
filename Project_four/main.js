function convertCurrency() {
        let amount = document.getElementById("amount").value;
        let rate = document.getElementById("rate").value;
        let currency = document.getElementById("currency").value;

        if (amount === "" || rate === "") {
            document.getElementById("result").innerHTML = "Please fill all fields!";
            console.log("Please fill all fields!")
            return;
        }

        let converted = amount * rate;

        document.getElementById("result").innerHTML =
            amount + " FRW = " + converted + " " + currency;


    }
    