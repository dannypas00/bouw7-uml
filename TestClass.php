    - const LOCALE_CATEGORIES = [LC_ALL, LC_COLLATE, LC_CTYPE, LC_MONETARY, LC_NUMERIC, LC_TIME];
    - ?bool runClassInSeparateProcess = null;
    - bool inIsolation = false;
    - array data = [];
    - dataName = '';
    - ?string expectedException = null;
    - ?string expectedExceptionMessage = null;
    - ?string expectedExceptionMessageRegExp = null;
    - expectedExceptionCode;
    - string name;
    - array dependencies = [];
    - array dependencyInput = [];
    - array iniSettings = [];
    - array locale = [];
    - array mockObjects = [];
    - ?MockGenerator mockObjectGenerator = null;
    - ?TestStatus status = null;
    - int numberOfAssertionsPerformed = 0;
    - ?TestResult result = null;
    - testResult;
    - string output = '';
    - ?string outputExpectedRegex = null;
    - ?string outputExpectedString = null;
    - outputCallback = false;
    - bool outputBufferingActive = false;
    - int outputBufferingLevel;
    - bool outputRetrievedForAssertion = false;
    - ?Snapshot snapshot = null;
    - ?bool beStrictAboutChangesToGlobalState = false;
    - bool registerMockObjectsFromTestArgumentsRecursively = false;
    - array warnings = [];
    - array groups = [];
    - bool doesNotPerformAssertions = false;
    - array customComparators = [];
    - array doubledTypes = [];
    # backupGlobals;
    # backupGlobalsExcludeList = [];
    # backupStaticAttributes;
    # backupStaticAttributesExcludeList = [];
    # runTestInSeparateProcess;
    # preserveGlobalState = true;
    # array providedTests = [];
    -  verifyMockObjects(): void
    -  checkRequirements(): void
    -  handleDependencies(): bool
    -  markSkippedForNotSpecifyingDependency(): void
    -  markSkippedForMissingDependency(ExecutionOrderDependency dependency): void
    -  markWarningForUncallableDependency(ExecutionOrderDependency dependency): void
    -  getMockObjectGenerator(): MockGenerator
    -  startOutputBuffering(): void
    -  stopOutputBuffering(): void
    -  snapshotGlobalState(): void
    -  restoreGlobalState(): void
    -  createGlobalStateSnapshot(bool backupGlobals): Snapshot
    -  compareGlobalStateSnapshots(Snapshot before, Snapshot after): void
    -  compareGlobalStateSnapshotPart(array before, array after, string header): void
    -  shouldInvocationMockerBeReset(MockObject mock): bool
    -  registerMockObjectsFromTestArguments(array testArguments, array &visited = []): void
    -  setDoesNotPerformAssertionsFromAnnotation(): void
    -  unregisterCustomComparators(): void
    -  cleanupIniSettings(): void
    -  cleanupLocaleSettings(): void
    -  checkExceptionExpectations(Throwable throwable): bool
    -  shouldRunInSeparateProcess(): bool
    -  isCallableTestMethod(string dependency): bool
    -  createMockObject(string originalClassName): MockObject
    + {static}  any(): AnyInvokedCountMatcher
    + {static}  never(): InvokedCountMatcher
    + {static}  atLeast(int requiredInvocations): InvokedAtLeastCountMatcher
    + {static}  atLeastOnce(): InvokedAtLeastOnceMatcher
    + {static}  once(): InvokedCountMatcher
    + {static}  exactly(int count): InvokedCountMatcher
    + {static}  atMost(int allowedInvocations): InvokedAtMostCountMatcher
    + {static}  returnValue(value): ReturnStub
    + {static}  returnValueMap(array valueMap): ReturnValueMapStub
    + {static}  returnArgument(int argumentIndex): ReturnArgumentStub
    + {static}  returnCallback(callback): ReturnCallbackStub
    + {static}  returnSelf(): ReturnSelfStub
    + {static}  throwException(Throwable exception): ExceptionStub
    + {static}  onConsecutiveCalls(...args): ConsecutiveCallsStub
    +  __construct(string name)
    + {static}  setUpBeforeClass(): void
    + {static}  tearDownAfterClass(): void
    +  toString(): string
    +  count(): int
    +  getActualOutputForAssertion(): string
    +  expectOutputRegex(string expectedRegex): void
    +  expectOutputString(string expectedString): void
    +  expectException(string exception): void
    +  expectExceptionCode(code): void
    +  expectExceptionMessage(string message): void
    +  expectExceptionMessageMatches(string regularExpression): void
    +  expectExceptionObject(\Exception exception): void
    +  expectNotToPerformAssertions(): void
    +  expectDeprecation(): void
    +  expectDeprecationMessage(string message): void
    +  expectDeprecationMessageMatches(string regularExpression): void
    +  expectNotice(): void
    +  expectNoticeMessage(string message): void
    +  expectNoticeMessageMatches(string regularExpression): void
    +  expectWarning(): void
    +  expectWarningMessage(string message): void
    +  expectWarningMessageMatches(string regularExpression): void
    +  expectError(): void
    +  expectErrorMessage(string message): void
    +  expectErrorMessageMatches(string regularExpression): void
    +  status(): TestStatus
    +  markAsRisky(): void
    +  hasFailed(): bool
    +  run(TestResult result): void
    +  getMockBuilder(string className): MockBuilder
    +  registerComparator(Comparator comparator): void
    +  doubledTypes(): array
    +  groups(): array
    +  setGroups(array groups): void
    +  getName(bool withDataSet = true): string
    +  size(): TestSize
    +  hasOutput(): bool
    +  output(): string
    +  doesNotPerformAssertions(): bool
    +  hasExpectationOnOutput(): bool
    +  registerMockObjectsFromTestArgumentsRecursively(): void
    +  runBare(): void
    +  setName(string name): void
    +  setDependencies(array dependencies): void
    +  setDependencyInput(array dependencyInput): void
    +  dependencyInput(): array
    +  setBeStrictAboutChangesToGlobalState(?bool beStrictAboutChangesToGlobalState): void
    +  setBackupGlobals(?bool backupGlobals): void
    +  setBackupStaticAttributes(?bool backupStaticAttributes): void
    +  setRunTestInSeparateProcess(bool runTestInSeparateProcess): void
    +  setRunClassInSeparateProcess(bool runClassInSeparateProcess): void
    +  setPreserveGlobalState(bool preserveGlobalState): void
    +  setInIsolation(bool inIsolation): void
    +  isInIsolation(): bool
    +  result()
    +  setResult(result): void
    +  setOutputCallback(callable callback): void
    +  registerMockObject(MockObject mockObject): void
    +  addToAssertionCount(int count): void
    +  numberOfAssertionsPerformed(): int
    +  usesDataProvider(): bool
    +  dataName()
    +  getDataSetAsString(): string
    +  getDataSetAsStringWithData(): string
    +  getProvidedData(): array
    +  addWarning(string warning): void
    +  sortId(): string
    +  provides(): array
    +  requires(): array
    +  setData(dataName, array data): void
    #  setUp(): void
    #  tearDown(): void
    #  runTest()
    #  iniSet(string varName, string newValue): void
    #  setLocale(...args): void
    #  createStub(string originalClassName): Stub
    #  createMock(string originalClassName): MockObject
    #  createConfiguredMock(string originalClassName, array configuration): MockObject
    #  createPartialMock(string originalClassName, array methods): MockObject
    #  createTestProxy(string originalClassName, array constructorArguments = []): MockObject
    #  getMockClass(string originalClassName, methods = [], array arguments = [], string mockClassName = '', bool callOriginalConstructor = false, bool callOriginalClone = true, bool callAutoload = true, bool cloneArguments = false): string
    #  getMockForAbstractClass(string originalClassName, array arguments = [], string mockClassName = '', bool callOriginalConstructor = true, bool callOriginalClone = true, bool callAutoload = true, array mockedMethods = [], bool cloneArguments = false): MockObject
    #  getMockFromWsdl(string wsdlFile, string originalClassName = '', string mockClassName = '', array methods = [], bool callOriginalConstructor = true, array options = []): MockObject
    #  getMockForTrait(string traitName, array arguments = [], string mockClassName = '', bool callOriginalConstructor = true, bool callOriginalClone = true, bool callAutoload = true, array mockedMethods = [], bool cloneArguments = false): MockObject
    #  getObjectForTrait(string traitName, array arguments = [], string traitClassName = '', bool callOriginalConstructor = true, bool callOriginalClone = true, bool callAutoload = true): object
    #  assertPreConditions(): void
    #  assertPostConditions(): void
    #  onNotSuccessfulTest(Throwable t): void
    #  recordDoubledType(string originalClassName): void
