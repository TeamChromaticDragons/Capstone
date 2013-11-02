USE [OKCreditInfo]
GO

/****** Object:  Table [dbo].[CustomerInformation]    Script Date: 11/02/2013 15:03:08 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[CustomerInformation](
	[Account#] [nchar](10) NULL,
	[First Name] [varchar](50) NULL,
	[Last Name] [varchar](50) NULL,
	[Address] [varchar](50) NULL,
	[State] [nchar](10) NULL,
	[ZipCode] [nchar](10) NULL,
	[DoB] [nchar](10) NULL,
	[Account Type] [varchar](50) NULL,
	[Account Balance] [nchar](100) NULL,
	[Interest] [nchar](100) NULL,
	[Credit Limit] [nchar](100) NULL,
	[Current Credit] [nchar](100) NULL,
	[Payment Plan] [varchar](50) NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

