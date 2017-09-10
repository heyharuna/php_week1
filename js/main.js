// create object

document.write("This is Javascript Practice</br>");

var me = {
    name: "Haruna",
    text : function() {
        return "I am " + this.name;
    },
    address: {
        country: "Canada",
        city: "Vancouver"
    }
};

document.write(me.text() + "</br>");
document.write(me.name+" lives at "+me.address.city);
