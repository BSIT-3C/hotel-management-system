console.log("Foreign Selector is now running");

document.getElementById("state").disabled = true;
document.getElementById("city").disabled = true;

const authToken = async () => {
    const res = await fetch(
        "https://www.universal-tutorial.com/api/getaccesstoken",
        {
            headers: {
                Accept: "application/json",
                "api-token":
                    "vbmNaM6cziuM-ddtOY9hgR68TeJ1xy0v3gm351xi1ze-QaybgCim0ytT6z86AagYkik",
                "user-email": "teddymarccastillo.enaje@bicol-u.edu.ph",
            },
        }
    );
    const data = await res.json();
    return data;
};

const getForeignCities = async (state, token) => {
    const res = await fetch(
        `https://www.universal-tutorial.com/api/cities/${state}`,
        {
            headers: {
                Accept: "application/json",
                Authorization: `bearer ${token}`,
            },
        }
    );

    const data = await res.json();
    return data;
};

const getCountries = async (token) => {
    const res = await fetch(
        `https://www.universal-tutorial.com/api/countries/`,
        {
            headers: {
                Accept: "application/json",
                Authorization: `bearer ${token}`,
            },
        }
    );

    const data = await res.json();
    return data;
};

const getStates = async (country, token) => {
    const res = await fetch(
        `https://www.universal-tutorial.com/api/states/${country}`,
        {
            headers: {
                Accept: "application/json",
                Authorization: `bearer ${token}`,
            },
        }
    );

    const data = await res.json();
    return data;
};

const selectCountry = async () => {
    country_input = document.getElementById("country").value;

    const token = await authToken();

    let states;
    if (country_input) {
        states = await getStates(country_input, token.auth_token);
    }
    document.getElementById("state").innerHTML = "";
    document.getElementById("city").innerHTML = "";

    console.log(country_input);
    if (country_input.length === 0) {
        document.getElementById("state").disabled = true;
        document.getElementById("city").disabled = true;
    }
    if (country_input) {
        document.getElementById("state").disabled = false;
    }

    if (states) {
        states.map(
            (state) =>
                (document.getElementById(
                    "state"
                ).innerHTML += `<option value="${state.state_name}">${state.state_name}</option>`)
        );

        selectStates();
    }
};

const selectStates = async () => {
    state_input = document.getElementById("state").value;

    const token = await authToken();

    const cities = await getForeignCities(state_input, token.auth_token);

    if (state_input) {
        document.getElementById("city").disabled = false;
    }

    document.getElementById("city").innerHTML = "";

    cities.map(
        (city) =>
            (document.getElementById(
                "city"
            ).innerHTML += `<option value="${city.city_name}">${city.city_name}</option>`)
    );

    selectForeignCity();
};

const selectForeignCity = () => {
    city = document.getElementById("city").value;
    console.log("city: ", city);
};

const runForeignSelector = async () => {
    const token = await authToken();

    const countries = await getCountries(token.auth_token);

    countries.map(
        (country) =>
            (document.getElementById(
                "country"
            ).innerHTML += `<option value="${country.country_name}">${country.country_name}</option>`)
    );

    country_input = document.getElementById("country").value;
};

const selector_foreign_country = document.getElementById("country");
selector_foreign_country.onchange = selectCountry;
const selector_foreign_state = document.getElementById("state");
selector_foreign_state.onchange = selectStates;
const selector_foreign_city = document.getElementById("city");
selector_foreign_city.onchange = selectForeignCity;

runForeignSelector();
