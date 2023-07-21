/*!
 * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
 * Copyright 2011-2022 The Bootstrap Authors
 * Licensed under the Creative Commons Attribution 3.0 Unported License.
 */

//  (() => {
//     'use strict'

//     const storedTheme = localStorage.getItem('theme')

//     const getPreferredTheme = () => {
//       if (storedTheme) {
//         return storedTheme
//       }

//       return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
//     }

//     const setTheme = function (theme) {
//       if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
//         document.documentElement.setAttribute('data-bs-theme', 'dark')
//       } else {
//         document.documentElement.setAttribute('data-bs-theme', theme)
//       }
//     }

//     setTheme(getPreferredTheme())

//     const showActiveTheme = theme => {
//       const activeThemeIcon = document.querySelector('.theme-icon-active')
//       const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
//       const iconOfActiveBtn = btnToActive.querySelector('i').dataset.themeIcon

//       document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
//         element.classList.remove('active')
//       })

//       btnToActive.classList.add('active')
//       activeThemeIcon.classList.remove(activeThemeIcon.dataset.themeIconActive)
//       activeThemeIcon.classList.add(iconOfActiveBtn)
//       activeThemeIcon.dataset.iconActive = iconOfActiveBtn
//     }

//     window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
//       if (storedTheme !== 'light' || storedTheme !== 'dark') {
//         setTheme(getPreferredTheme())
//       }
//     })

//     window.addEventListener('DOMContentLoaded', () => {
//       showActiveTheme(getPreferredTheme())

//       document.querySelectorAll('[data-bs-theme-value]')
//       .forEach(toggle => {
//         toggle.addEventListener('click', () => {
//           const theme = toggle.getAttribute('data-bs-theme-value')
//           localStorage.setItem('theme', theme)
//           setTheme(theme)
//           showActiveTheme(theme)
//         })
//       })
//     })

// var today = new Date();
// var dd = String(today.getDate()).padStart(2, '0');
// var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
// var yyyy = today.getFullYear();;
// today = yyyy + '-' + mm + '-' + dd;
// document.getElementById('tanggal').value = today;
// document.getElementById('tahun').value = today;

// })()
