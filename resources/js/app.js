import '../css/app.css';
import './bootstrap';
import 'preline';

document.addEventListener('DOMContentLoaded', () => {
    window.HSStaticMethods.autoInit();
});

document.addEventListener('livewire:navigated', () => { 
    window.HSStaticMethods.autoInit();
})
