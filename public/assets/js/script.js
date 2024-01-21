function deleteData(id){
    Swal.fire({
    title: 'Deseja mesmo deletar?',
    text: "Deletar Item!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sim!'
    }).then((result) => {
    if (result.isConfirmed) {
        // console.log(id);
        // Swal.fire(
        // 'Deleted!',
        // 'Your file has been deleted.',
        // 'success'
        // )
        document.getElementById('delete-'+id).submit();
    }
    })
}

//Texrarea


