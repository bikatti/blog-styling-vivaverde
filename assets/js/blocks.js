( function (blocks, element ) {
    let el = element.createElement

    let blockStyle = {
        backgroundColor: '#900',
        color: '#fff',
        padding: '20px'
    }

    blocks.registerBlockType( 'monlogo/caja', {
        title: 'Monlogo bloques: Caja',
        icon: 'universal-access-alt',
        category: 'layout',
        edit: () => {
            return el(
                'p',
                { style: blockStyle },
                'Hello World, From the editor'
            )
        },
        save: () => {
            return el(
                'p',
                { style: blockStyle },
                'Hello World, From the frontend'
            )
        }
    })
}(
    window.wp.blocks,
    window.wp.element
))