exports.handler = async function(event) {
    return `Hello world! Here is a Lambda ENV variable: ${process.env.AWS_EXECUTION_ENV}`
}
