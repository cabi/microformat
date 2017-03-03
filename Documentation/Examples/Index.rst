Examples
-------

.. _examples:

Using in your fluid-template the following block.

::

	{namespace m=HDNET\Microformat\ViewHelper}

	<m:format.jsonLd showInHead="1" jsonPrettyPrint="1">
		<m:microformat.event name="Tanz in den Mai" description="Tolle Tanzveranstaltung mit netten Menschen." url="http://domaine.de/tanz-in-den-mai.html" location="Festzelt auf dem Marktplatz" isAccessibleForFree="true">
			<m:microformat.imageObject key="image" caption="Bild 1" url='http://domaine.de/bild1.jpg'></m:microformat.imageObject>
			<m:microformat.imageObject key="image" caption="Bild 2" url='http://domaine.de/bild2.jpg'></m:microformat.imageObject>
			<m:microformat.imageObject key="image" caption="Bild 3" url='http://domaine.de/bild3.jpg'></m:microformat.imageObject>
		</m:microformat.event>
	</m:format.jsonLd>


Give you in the html-output the following block in the head-section of the page.

::

	<script type="application/ld+json">
	{
		"image": [
			{
				"@context": "http://schema.org",
				"@type": "ImageObject",
				"url": "http://domaine.de/bild1.jpg",
				"caption": "Bild 1"
			},
			{
				"@context": "http://schema.org",
				"@type": "ImageObject",
				"url": "http://domaine.de/bild2.jpg",
				"caption": "Bild 2"
			},
			{
				"@context": "http://schema.org",
				"@type": "ImageObject",
				"url": "http://domaine.de/bild3.jpg",
				"caption": "Bild 3"
			}
		],
		"@context": "http://schema.org",
		"@type": "Event",
		"description": "Tolle Tanzveranstaltung mit netten Menschen.",
		"name": "Tanz in den Mai",
		"url": "http://domaine.de/tanz-in-den-mai.html",
		"isAccessibleForFree": true,
		"location": "Festzelt auf dem Marktplatz"
	}
	</script>
