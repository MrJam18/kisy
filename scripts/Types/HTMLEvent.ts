export type HTMLEvent = Event & {
    target: Element;
    currentTarget: Element;
}