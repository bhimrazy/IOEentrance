if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js')
        .then((reg) => console.log('Service worker registered Successfully.', reg))
        .catch((err) => console.log('Service worker not registered.', err))
}
let deferredPrompt;

window.addEventListener('beforeinstallprompt', (e) => {
    // Stash the event so it can be triggered later.
    deferredPrompt = e;

});
btnAddDesktop = document.getElementById('desktop');
btnAddDesktop.addEventListener('click', (e) => {
    // hide our user interface that shows our A2HS button
    // Show the prompt
    deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice
        .then((choiceResult) => {
            if (choiceResult.outcome === 'accepted') {
                console.log('User accepted the A2HS prompt');
            } else {
                console.log('User dismissed the A2HS prompt');
            }
            deferredPrompt = null;
        });
});

btnAddMobile = document.getElementById('mobile');
btnAddMobile.addEventListener('click', (e) => {
    // hide our user interface that shows our A2HS button
    btnAdd.style.display = 'none';
    // Show the prompt
    deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice
        .then((choiceResult) => {
            if (choiceResult.outcome === 'accepted') {
                console.log('User accepted the A2HS prompt');
            } else {
                console.log('User dismissed the A2HS prompt');
            }
            deferredPrompt = null;
        });
});
