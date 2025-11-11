<!-- 1. Connect the Profile.blade.php file with profapp.blade.php -->

@section('title', 'Profil Mahasiswa')

@section('content')
<div class="profile-wrapper">
    <div class="profile-card animate-fadeup">
        <div class="profile-header">
            <div class="avatar animate-pop">
                <span><!-- 2. Call the variable from the controller and display the first letter of the name --></span>
            </div>
            <div class="profile-identity">
                <h2><!-- 3. Call the variable from the controller to display the name --></h2>
                <p><!-- 4. Call the variable from the controller to display the student ID (NIM) --></p>
            </div>
        </div>

        <div class="profile-info animate-delay">
            <div class="info-group">
                <span class="label">Study Program</span>
                <span class="value"><!-- 5. Call the variable from the controller to display the study program --></span>
            </div>
            <div class="info-group">
                <span class="label">Fakultas</span>
                <span class="value"><!-- 6. Call the variable from the controller to display the faculty --></span>
            </div>
            <div class="info-group">
                <span class="label">Class</span>
                <span class="value"><!-- 7. Call the variable from the controller to display the class --></span>
            </div>
            <div class="info-group">
                <span class="label">Email</span>
                <span class="value"><!-- 8. Call the variable from the controller to display the email --></span>
            </div>
        </div>

        <div class="btn-wrapper animate-fadein">
             <!-- 9. Fill the href attribute value to direct the user to the dashboard page -->
            <a href="" class="btn-back">
                <i class="bi bi-arrow-left"></i> Dashboard
            </a>
        </div>
    </div>
</div>
@endsection
