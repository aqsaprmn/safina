const buttonBook = document.getElementById("btnBooking");
const buttonCan = document.getElementById("cancel");
if (buttonBook) {
	buttonBook.addEventListener("click", function (e) {
		e.stopImmediatePropagation();
		e.stopPropagation();

		const text = buttonBook.getAttribute("data-text");

		Swal.fire({
			title: "Booking Konfirmasi",
			text: "Anda Akan Melakukan Booking " + text,
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "Ya, Booking!",
		}).then((result) => {
			if (result.isConfirmed) {
				buttonCan.click();
				Swal.fire("Sukses!", "Anda Berhasil Booking", "success").then(
					(result) => {
						if (result.isConfirmed) {
							window.location = "http://localhost/safina/";
						}
					}
				);
			}
		});
	});
}

const maskapai = document.getElementById("maskapai");

if (maskapai) {
	maskapai.addEventListener("change", function () {
		const val = this.value;

		const bandara = document.getElementsByClassName("");

		if (val == 1) {
		}
	});
}
