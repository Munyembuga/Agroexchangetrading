document.addEventListener('DOMContentLoaded', function () {
    const editProfileButton = document.getElementById('editProfile');
    const changePasswordButton = document.getElementById('changePassword');
    const logoutButton = document.getElementById('logout');

    editProfileButton.addEventListener('click', function () {
        // Redirect to the edit profile page or implement the edit functionality
        window.location.href = 'editprofile.html';
    });

    changePasswordButton.addEventListener('click', function () {
        // Redirect to the change password page or implement the change password functionality
        window.location.href = 'changepssword.html';
    });

    logoutButton.addEventListener('click', function () {
        // Implement logout functionality (e.g., clear user session and redirect to login)
        window.location.href = 'login.html';
    });
});
