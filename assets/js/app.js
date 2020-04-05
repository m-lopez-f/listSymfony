/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../css/app.css';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
import $ from 'jquery';

$(document).ready(function() {
    const loadHeroes = () => {
        $.post("/heroes", {},
            (response, status) => {
                $('#listHeroes>tbody').html('');
                const {results} = response;
                results.forEach((result) => {
                    $('#listHeroes>tbody')
                        .append(`<tr>
                            <td>${result['name']}</td>
                            <td>${result['gender']}</td>
                            <td>${result['mass']}</td>
                            <td>${result['height']}</td>
                            <td>${result['birth_year']}</td>
                          </tr>`);

                });
            }
        );
    };
    window.loadHeroes = loadHeroes
});

