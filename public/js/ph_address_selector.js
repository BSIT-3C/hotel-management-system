console.log("PH Address Selector is now running");

let regionElement = document.getElementById("ph-region");
let provinceElement = document.getElementById("ph-province");
let cityElement = document.getElementById("ph-city");
let barangayElement = document.getElementById("ph-barangay");

const getRegions = async () => {
    const res = await fetch(`https://psgc.gitlab.io/api/regions/`);

    const data = await res.json();
    return data;
};

const getProvinces = async (regionCode) => {
    const res = await fetch(
        `https://psgc.gitlab.io/api/regions/${regionCode}/provinces/`
    );

    const data = await res.json();
    return data;
};

const getCities = async (provinceCode) => {
    let res;
    if (provinceCode === "130000000") {
        res = await fetch(
            `https://psgc.gitlab.io/api/regions/${provinceCode}/cities-municipalities/`
        );
    } else {
        res = await fetch(
            `https://psgc.gitlab.io/api/provinces/${provinceCode}/cities-municipalities/`
        );
    }

    const data = await res.json();
    return data;
};

const getBarangays = async (cityCode) => {
    const res = await fetch(
        `https://psgc.gitlab.io/api/cities-municipalities/${cityCode}/barangays/`
    );

    const data = await res.json();
    return data;
};

const selectRegion = async (event) => {
    var regionCode =
        event.target.options[event.target.selectedIndex].dataset.code;
    regionElement.dataset.code = regionCode;

    // ncr
    if (regionCode === "130000000") {
        document.getElementById("ph-province").value = "";
        document.getElementById(
            "ph-province"
        ).innerHTML = `<option  value='Metro Manila'>Metro Manila</option>`;
        document.getElementById("ph-city").innerHTML = "";
        document.getElementById("ph-barangay").innerHTML = "";

        if (regionCode) {
            document.getElementById("ph-province").disabled = false;
        }

        provinceElement.onchange();
    } else {
        const provinces = await getProvinces(regionCode);

        document.getElementById("ph-province").innerHTML = "";
        document.getElementById("ph-city").innerHTML = "";
        document.getElementById("ph-barangay").innerHTML = "";

        if (regionCode) {
            document.getElementById("ph-province").disabled = false;
        }

        document.getElementById("ph-province").innerHTML +=
            "<option value=''>-- Select province --</option>";
        provinces.map((province, index) => {
            if (index === 0) {
                provinceElement.value = province.name;
                provinceElement.dataset.code = province.code;
            }
            document.getElementById(
                "ph-province"
            ).innerHTML += `<option value='${province.name}' data-code='${province.code}'>${province.name}</option>`;
        });
    }
};

const selectProvince = async (event) => {
    var provinceCode;

    let regionCode = regionElement.dataset.code;

    if (regionCode === "130000000") {
        provinceCode = "130000000";
    } else {
        provinceCode =
            event.target.options[event.target.selectedIndex].dataset.code;

        provinceElement.dataset.code = provinceCode;
        regionCode = regionElement.dataset.code;
    }

    const cities = await getCities(provinceCode);

    document.getElementById("ph-city").innerHTML = "";
    document.getElementById("ph-barangay").innerHTML = "";

    if (provinceCode) {
        document.getElementById("ph-city").disabled = false;
    }

    document.getElementById("ph-city").innerHTML +=
        "<option value=''>-- Select city --</option>";
    cities.map(
        (city) =>
            (document.getElementById(
                "ph-city"
            ).innerHTML += `<option value='${city.name}' data-code="${city.code}">${city.name}</option>`)
    );
};

const selectCity = async (event) => {
    let cityCode =
        event.target.options[event.target.selectedIndex].dataset.code;

    cityElement.dataset.code = cityCode;

    const barangays = await getBarangays(cityCode);

    if (cityCode) {
        document.getElementById("ph-barangay").disabled = false;
    }

    document.getElementById("ph-barangay").innerHTML = "";

    document.getElementById("ph-barangay").innerHTML +=
        "<option value=''>-- Select barangay --</option>";

    barangays.map(
        (barangay) =>
            (document.getElementById(
                "ph-barangay"
            ).innerHTML += `<option value='${barangay.name}' data-code="${barangay.code}">${barangay.name}</option>`)
    );
};

const selectBarangay = () => {
    let barangayCode = document.getElementById("ph-barangay").value;
};

const runSelector = async () => {
    const regions = await getRegions();

    regions.map(
        (region) =>
            (document.getElementById(
                "ph-region"
            ).innerHTML += `<option value='${region.name}' data-code='${region.code}'>${region.name}</option>`)
    );
};

const selector_region = document.getElementById("ph-region");
selector_region.onchange = selectRegion;
const selector_province = document.getElementById("ph-province");
selector_province.onchange = selectProvince;
const selector_city = document.getElementById("ph-city");
selector_city.onchange = selectCity;
const selector_barangay = document.getElementById("ph-barangay");
selector_barangay.onchange = selectBarangay;

runSelector();
