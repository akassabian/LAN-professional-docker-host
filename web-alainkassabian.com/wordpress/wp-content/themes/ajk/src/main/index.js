import React from 'react';
import App from './App';
import './style.scss';

document.addEventListener('DOMContentLoaded', () => {
	console.log('Hello from React');
	const entry = document.querySelector('#wpackio-reactapp');
	render(<App />, entry);
});