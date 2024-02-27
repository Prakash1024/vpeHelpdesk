import $ from 'jquery';
import './bootstrap';
import { renderCharts } from './chart.js';

document.addEventListener('DOMContentLoaded', function () {
  renderCharts();
});

$(function () {
  console.log('© Vpe Healthcare, All Rights Reserved');
});