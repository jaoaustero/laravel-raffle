import $ from 'jquery';

const registeredPlayer = [
    {
        id: 1,
        full_name: 'Jerald Austero',
    },

    {
        id: 2,
        full_name: 'Sheryl Senining',
    },

    {
        id: 3,
        full_name: 'Jemuel Acuna',
    },

    {
        id: 4,
        full_name: 'Kristina Mari Pajota',
    },

    {
        id: 5,
        full_name: 'Jaycee Mariano',
    },

    {
        id: 6,
        full_name: 'Baby Abegail',
    },

    {
        id: 7,
        full_name: 'Norbert Carpio',
    },

    {
        id: 8,
        full_name: 'Hernane Balinas',
    },

    {
        id: 9,
        full_name: 'Tristan Fontalera',
    },

    {
        id: 10,
        full_name: 'Kristine Tadena',
    },

    {
        id: 11,
        full_name: 'Richard Enriquez',
    },

    {
        id: 12,
        full_name: 'Chenee Olesco',
    },

    {
        id: 13,
        full_name: 'Jari Ullakonoja',
    },

    {
        id: 14,
        full_name: 'Nathalia Ballao',
    },

    {
        id: 15,
        full_name: 'Lovely Ann Sagolile',
    },

    {
        id: 16,
        full_name: 'Mikko Huumonen',
    },

    {
        id: 17,
        full_name: 'Nepritariel Genilo',
    },

    {
        id: 18,
        full_name: 'Jan Renzo Baranda',
    },

    {
        id: 19,
        full_name: 'Jeonneil Blanco',
    },

    {
        id: 20,
        full_name: 'Paul Andrei Diez',
    },

    {
        id: 21,
        full_name: 'Markwell Gallos',
    },
];

function insertPlayers()
{
    for (let i = 0; i < registeredPlayer.length; i++)
    {
        if (i == 1)
        {
            $('#players').append(`
                <li class="uis-active" data-id="${registeredPlayer[i].id}">
                    ${registeredPlayer[i].full_name}
                </li>
            `);
        }
        else
        {
            $('#players').append(`
                <li data-id="${registeredPlayer[i].id}">
                    ${registeredPlayer[i].full_name}
                </li>
            `);
        }
    }
};

insertPlayers();