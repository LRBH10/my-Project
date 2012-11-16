<?xml version="1.0" encoding="ISO-8859-1" ?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

<xsl:output method="html" encoding="ISO-8859-1" />

<xsl:template match="/">
	<html>
		<head>
			<title> EXAMPLE</title>
                        <script src="blazo.js"></script>
        	</head>
		<body>
			<h1> Formulaire Generique !!! </h1><br/>
			<xsl:apply-templates select="//*"/><br/>
                        <div id="Aff"></div>
		</body>
	</html>
</xsl:template>

<xsl:template match="*[not(preceding::node()[name()=name(current())])]">
	<xsl:variable name="currentName" select="name(current())" />
		<h3><xsl:value-of select="$currentName" /></h3>
                <div>
                <xsl:for-each select="@*">
			<xsl:variable name="currentAttribut" select="name()" />
			<p>				
			<label><xsl:value-of select="$currentAttribut" /></label><br/>	
			<select id="{name()}" onchange="blaz();">
				<option selected="selected">tous</option>
				<xsl:apply-templates select="//*[name()=$currentName]/@*[name()=$currentAttribut]"/>
			</select>
			</p>
		</xsl:for-each>

		</div>
	
</xsl:template>

<xsl:template match="//@*[not(preceding::node()/@* = . )]">
	<option><xsl:value-of select="."/></option>
        <script>
            tree [i] =<xsl:value-of select="."/>;
            i++;
        </script>
</xsl:template>

<xsl:template match="*">
</xsl:template>

<xsl:template match="@*">
</xsl:template>

</xsl:stylesheet>
 

