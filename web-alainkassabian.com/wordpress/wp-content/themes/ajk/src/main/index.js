import React from 'react';
import App from './App';
//import './style.scss';

document.addEventListener('DOMContentLoaded', () => {
	console.log('Hello from React 2');
	const entry = document.querySelector('#wpackio-reactapp');
	alert('test');
	render(<App />, entry);
});