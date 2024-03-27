function sweetAlert(title, text, icon, confirm, cancel) {
  Swal.fire({
    title: title,
    text: text,
    icon: icon,
    width: 350,
    padding: "3em",
    background: "#fff url('dist/images/backgrounds/active-bg.png')",
    backdrop: `
            rgba(0,0,123,0.4)
            url("dist/images/backgrounds/nyan-cat.gif")
            center left
            no-repeat
                `,
    showConfirmButton: confirm,
    confirmButtonText: 'Iya',
    showCancelButton: cancel,
    cancelButtonText: 'Tidak',
    buttonsStyling: false,
    customClass: {
            confirmButton: 'swal2-confirm btn btn-primary mx-2',
            cancelButton: 'swal2-cancel btn btn-secondary mx-2',
    },
  });
}