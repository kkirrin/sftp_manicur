export const initDeleteText = () => {
    setTimeout(() => {
        const elementsWithString = Array.from(document.querySelectorAll('*')) 
            .filter(element => element.childNodes.length === 1 && element.childNodes[0].nodeType === Node.TEXT_NODE)
            .map(element => element.childNodes[0])
            .filter(node => node.nodeValue.includes('(необязательно)'));
        
        elementsWithString.forEach(node => {
            const newText = node.nodeValue.replace('(необязательно)', '');
            node.nodeValue = newText;
        });
    }, 500)
};