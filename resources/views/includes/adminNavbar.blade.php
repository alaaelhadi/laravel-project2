<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="index.html" class="navbar-brand">
        <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="{{ route('index') }}" class="nav-item nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Subject</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="{{ route('subjectsList') }}" class="dropdown-item">Subjects List</a>
                    <a href="{{ route('addSubject') }}" class="dropdown-item">Add Subject</a>
                    <a href="{{ route('trashedSubject') }}" class="dropdown-item">Trashed Subjects</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Teacher</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="{{ route('teachersList') }}" class="dropdown-item">Teachers List</a>
                    <a href="{{ route('addTeacher') }}" class="dropdown-item">Add Teacher</a>
                    <a href="{{ route('trashedTeacher') }}" class="dropdown-item">Trashed Teachers</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Testimonial</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="{{ route('testimonialsList') }}" class="dropdown-item">Testimonials List</a>
                    <a href="{{ route('addTestimonial') }}" class="dropdown-item">Add Testimonial</a>
                    <a href="{{ route('trashedTestimonial') }}" class="dropdown-item">Trashed Testimonials</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Appointment</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="{{ route('appointmentList') }}" class="dropdown-item">Appointments List</a>
                    <a href="{{ route('trashedAppointment') }}" class="dropdown-item">Trashed Appointments</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Contact</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="{{ route('contactList') }}" class="dropdown-item">Contacts List</a>
                    <a href="{{ route('trashedContact') }}" class="dropdown-item">Trashed Contacts</a>
                </div>
            </div>
        </div>
        {{-- <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a> --}}
    </div>
</nav>
<!-- Navbar End -->