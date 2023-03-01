const teamMembers = document.querySelectorAll('.team-member');

teamMembers.forEach((member) => {
    member.addEventListener('mouseenter', () => {
        member.style.transform = 'scale(1.1)';
    });
    member.addEventListener('mouseleave', () => {
        member.style.transform = 'scale(1)';
    });
});



