export default function SSOInputs({
                                      SAMLRequest,
                                      RelayState
                                  }: { SAMLRequest: string, RelayState: string }
) {
    return (
        <>
            <input type="hidden" id="SAMLRequest" name="SAMLRequest" value={SAMLRequest}/>
            <input type="hidden" id="RelayState" name="RelayState" value={RelayState}/>
        </>
    )
}
