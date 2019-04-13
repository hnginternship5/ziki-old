'use strict';

const error = document.getElementById('error');

function timeout() {
    setTimeout(() => error.remove(), 3000);
}

timeout();