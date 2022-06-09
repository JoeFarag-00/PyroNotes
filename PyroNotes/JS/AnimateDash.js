"use strict";
class Notes {
    constructor() {
        this.noteId = 0;
        this.colourSet = [
            { 'label': 'pale', 'value': '#FEFEFF' },
            { 'label': 'blue', 'value': '#eef6fb' },
            { 'label': 'beige', 'value': '#FED99B' },
            { 'label': 'red', 'value': '#fbd5d0' }
        ];
        this.notesContainer = document.querySelector('#notes');
        this.btnAdd = document.querySelector('#btnAdd');
        this.btnAdd.addEventListener('click', this.addNote.bind(this), false);
        this.addNote();
    }
    getTimeStamp() {
        let date = new Date();
        let day = date.getDate();
        let month = date.getMonth() + 1;
        let year = date.getFullYear();
        let hour = (date.getHours() > 12) ? date.getHours() - 12 : date.getHours();
        let min = (date.getMinutes() < 10) ? `0${date.getMinutes()}` : date.getMinutes();
        let sec = date.getSeconds();
        let ampm = (date.getHours() >= 12) ? 'pm' : 'am';
        return `${day}/${month}/${year} ${hour}:${min}:${sec} ${ampm}`;
    }
    updateNoteLabel(event) {
        let selectedElement = event.target;
        let elements = selectedElement.parentNode.getElementsByTagName('a');
        let colour = selectedElement.getAttribute('data-colour');
        this.setAttribute('style', `background-color:${colour}`);
        for (let element of elements) {
            element.classList.toggle('is--active', false);
        }
        selectedElement.classList.add('is--active');
        return false;
    }
    deleteNote(event) {
        event.target.removeEventListener('click', this.deleteNote);
        let elem = this;
        if (elem.parentNode) {
            elem.parentNode.removeChild(elem);
        }
        return false;
    }
    createNote() {
        this.noteId += 1;
        let container = document.createElement('div');
        let button = document.createElement('a');
        let title = document.createElement('div');
        let header = document.createElement('header');
        let footer = document.createElement('footer');
        let body = document.createElement('div');
        let content = document.createElement('div');
        let select = document.createElement('select');
        let id = `note${this.noteId}`;
        let _this = this;
        container.id = id;
        container.classList.add('note__container');
        content.classList.add('note__content');
        body.classList.add('note__body');
        header.classList.add('note__header');
        footer.classList.add('note__footer');
        title.classList.add('note__title');
        button.classList.add('note__delete');
        select.classList.add('note__label');
        for (let colour of this.colourSet) {
            let option = document.createElement('a');
            option.classList.add('note__colour-picker');
            option.setAttribute('data-colour', colour.value);
            option.setAttribute('href', '#colour');
            option.setAttribute('title', colour.label);
            option.setAttribute('style', `background-color: ${colour.value}`);
            option.innerHTML = colour.label;
            option.addEventListener('click', _this.updateNoteLabel.bind(container), false);
            footer.appendChild(option);
        }
        let firstOption = footer.getElementsByTagName('a');
        firstOption[0].classList.add('is--active');
        container.setAttribute('style', `background-color:${firstOption[0].getAttribute('data-colour')}`);
        button.setAttribute('data-note', id);
        button.setAttribute('href', '#delete');
        button.innerHTML = '&#45;';
        title.innerHTML = this.getTimeStamp();
        content.setAttribute('contenteditable', 'true');
        button.addEventListener('click', this.deleteNote.bind(container), false);
        //Build markup
        body.appendChild(content);
        header.appendChild(title);
        header.appendChild(button);
        container.appendChild(header);
        container.appendChild(body);
        container.appendChild(footer);
        return container;
    }
    addNote(event) {
        this.notesContainer.insertBefore(this.createNote(), this.notesContainer.childNodes[0]);
    }
}
let notes = new Notes();