export default () => {
    $('.tab-link').on('click', function () {
        let tabLinkID = $(this).attr('data-tab');

        $('.tab-link').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $('.tab-content-wrapper').find("[data-id='" + tabLinkID + "']").addClass('current');

    })
}