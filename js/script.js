const translations = {
	en: {
		home: "Home",
		service: "Services",
		portfolio: "Portfolio",
		brand: "Brands",
		about: "About Us",
		contact: "Contact",
	},
	ar: {
		home: "الصفحة الرئيسية",
		service: "الخدمات",
		portfolio: "اعمالنا",
		brand: "ماركات",
		about: "من نحن",
		contact: "تواصل معنا",
	},
};

const languageSelector = document.querySelector("select");

languageSelector.addEventListener("change", (event) => {
	setLanguage(event.target.value);
	localStorage.setItem("lang", event.target.value);
});

document.addEventListener("DOMContentLoader", () => {
	setLanguage(localStorage.getItem("lang"));
});

const setLanguage = (language) => {
	const elements = document.querySelectorAll("[data-i18n]");
	elements.forEach((element) => {
		const translationKey = element.getAttribute("data-i18n");
		elements.textContent = translations[language][translationKey];
	});
	document.dir = language === "ar" ? "rtl" : "ltr";
};
