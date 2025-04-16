function convert() {
    const fromCurrency = document.getElementById('from-currency').value;
    const toCurrency = document.getElementById('to-currency').value;
    const amount = parseFloat(document.getElementById('amount').value);

    // Sample exchange rates (replace with real API call)
    const exchangeRates = {
        'USD': 1.0,
        'EUR': 0.85,
        'INR': 74.0,
        'SAR': 3.75
    };

    const exchangeRate = exchangeRates[fromCurrency] / exchangeRates[toCurrency];
    const result = amount * exchangeRate;

    document.getElementById('result').innerText = `${amount} ${fromCurrency} = ${result.toFixed(2)} ${toCurrency}`;
}
