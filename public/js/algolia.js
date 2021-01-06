const client = algoliasearch("E6U8N0J1TR", "6e5858109ee9b3eb1f5b02d14ee7b5ca");
const posts = client.initIndex('posts');

autocomplete('#aa-search-input', {}, [
    {
      source: autocomplete.sources.hits(posts, { hitsPerPage: 3 }),
      displayKey: 'name',
      templates: {
        header: '<div class="aa-suggestions-category">Results</div>',
        suggestion({_highlightResult}) {
          return `<span>${_highlightResult.title.value}</span><span>${_highlightResult.lang.value}</span>`;
        },

        empty : function (result) {
          return 'Sorry, we are unable to find result for "' + result.query + '"';
        }
      }
    },
]).on('autocomplete:selected', function (event, suggestion, dataset) {
    console.log(suggestion);
    window.location.href = window.location.origin + '/' + suggestion.lang + '/blog/' + suggestion.category_slug + '/' + suggestion.slug;
  });
