<template>
     <nav class="navbar navbar-expand-lg">                
                    <div class="container">
                        <a class="navbar-brand d-flex align-items-center" href="index.html">
                            <img src="../../public/assets/images/coffee-beans.png" class="navbar-brand-image img-fluid" alt="Barista Cafe Template">
                            Barista
                        </a>
        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-lg-auto">
                                <li class="nav-item">
                                    <router-link class="nav-link" to="/">Home</router-link>
                                </li>
        
                                <li class="nav-item">
                                    <router-link class="nav-link" to="/reservations">Reservations</router-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
</template>

<script>
// import $ from 'jquery'; // Import jQuery
// export default {
//     mounted() {
//     // NAVBAR COLLAPSE
//     $('.navbar-collapse a').on('click', function() {
//         $(".navbar-collapse").collapse('hide');
//         });
//     }
// }
</script>

<style>

</style>