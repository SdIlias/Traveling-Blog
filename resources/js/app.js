 import './bootstrap';
import.meta.glob([ '../images/**', ]);
import './theme';

import Swal from 'sweetalert2';

window.confirmDelete = function(id, name){
    
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to restore this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(name + '_' + id).submit();
        } 
    });
}

window.cannot = function(message){
    Swal.fire(
        'Error',
        message,
        'error'
    );
}