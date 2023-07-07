function getDashboardInformation(){

    // fetch

    fetchUniqueVisitor();
}

// fetch Data from API

async function fetchUniqueVisitor() {

    const response = await fetch("http://localhost:8080/uniquevisitor");
    const jsonData = await response.json();

    // assign the data in te screen (dashboard)

    document.getElementById('unique_visitor').innerHTML = jsonData.unique_visitor;
}

window.onload = getDashboardInformation