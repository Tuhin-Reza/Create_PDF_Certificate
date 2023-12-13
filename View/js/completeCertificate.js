window.onload = function() {
    const element = document.getElementById('content');
    const options = {
        filename: '' + fullName + '.pdf',
        margin: 0,
        // image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2,height:100 },
        jsPDF: {
            unit: 'in',
            format: 'a4',
            orientation: 'landscape'
        }
    };
    html2pdf().set(options).from(element).save();
};