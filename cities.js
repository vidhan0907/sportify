const cities = [
    { state: "Andhra Pradesh", cities: ["Amaravati", "Guntur", "Kakinada", "Tirupati", "Vijayawada"] },
    { state: "Karnataka", cities: ["Bengaluru", "Hubli", "Mangalore", "Mysore", "Shimoga"] },
    { state: "Maharashtra", cities: ["Mumbai", "Nagpur", "Nashik", "Pune", "Thane"] },
    { state: "Tamil Nadu", cities: ["Chennai", "Coimbatore", "Madurai", "Salem", "Tiruchirappalli"] },
    { state: "West Bengal", cities: ["Asansol", "Durgapur", "Howrah", "Kolkata", "Siliguri"] },
    // Add more states and cities here
];

$(document).ready(function() {
    const $citySelect = $('#city-select');

    // Append cities to the select element
    cities.forEach(state => {
        state.cities.forEach(city => {
            const option = new Option(city, city);
            $(option).attr('name', 'city');
            $citySelect.append(option);
        });
    });

    // Initialize Select2 with search functionality
    $citySelect.select2({
        dropdownParent: $('body')
    });
});